<?php

/**
 * @author Sébastien FRANÇOIS <francois.sebastien.emile@gmail.com>
 */

namespace CoreBundle\CommonClass;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use DatabaseBundle\Entity;

class Common{
    
    /**
     * Function which will test if an HTTP Request contains the targeted form field and if this field is not empty or null
     * @param \Symfony\Component\HttpFoundation\Request $request Symfony request object which contains all the contents of your form and more
     * @param string $fieldName String which contains the "name" parameter of your "input" field
     * @return boolean
     */
    public function requestFieldTest($request, $fieldName){
        
        if ( $request->request->get($fieldName) !== null && $request->request->get($fieldName) != '' ){              
            return true;
        }
        else{
            return false;
        }    
        
    }
    
    /**
     * Function which will build the necessaries arrays to create DQL request
     * @param string $key Parameter which contains one key you want to input into your DQL request
     * @param array $keys Parameter which contains all the keys you have already wished to input into your DQL request
     * @param array $filter Parameter which contains the matching between keys and value you want to input into your DQL request
     * @param \Symfony\Component\HttpFoundation\Request $request Http request sent by the browser and built by Symfony 2
     * @param string $requestField String which contains the "name" parameter of your "input" field
     */
    public function buildFilterByKey($key, &$keys, &$filter, $request, $requestField){
        if (!in_array($key, $keys)){
            $keys[] = $key;
        }
        $filter[$key] = $request->request->get($requestField);
    }
    
    /**
     * Same as above excepted you don't need to have a \Symfony\Component\HttpFoundation\Request object
     * @param string $key Parameter which contains one key you want to input into your DQL request
     * @param array $keys Parameter which contains all the keys you have already wished to input into your DQL request
     * @param array $filter Parameter which contains the matching between keys and value you want to input into your DQL request
     * @param string $string String which contains the targeted field name into your table
     */
    public function buildFilterByStringKey($key, &$keys, &$filter, $string){
        if (!in_array($key, $keys)){
            $keys[] = $key;
        }    
        $filter[$key][] = $string;
    }
    
    public function buildFilterByArrayKey($key, &$keys, &$filter, $array){
        if (!in_array($key, $keys)){
            $keys[] = $key;
        }    
        $filter[$key][] = $array;
    }
    
    /**
     * Function which allow user to add clause "and where in" into your DQL request
     * @param \Doctrine\ORM\QueryBuilder $queryBuilder Doctrine QueryBuilder object which will create DQL request
     * @param string $fieldName String which contains the targeted field name into your table
     * @param array $data Array of data to input to the clause "and where in()"
     * @return \Doctrine\ORM\QueryBuilder Doctrine QueryBuilder Object which contains the current DQL request
     * @throws \ErrorException
     */
    public function queryAddWhereIn($queryBuilder, $fieldName, $data){
        
        if(!is_a($queryBuilder, 'Doctrine\ORM\QueryBuilder')){
            throw new \ErrorException("Variable \$queryBuilder type error ! Expected type : \Doctrine\ORM\QueryBuilder.");
        }
        else if(!is_string($fieldName)){
            throw new \ErrorException("Variable \$fieldName type error ! Expected type : String.");
        }
        else if(!is_array($data)){
            throw new \ErrorException("Variable \$data type error ! Expected type : Array.");
        }
        else{
            if (empty($data) || $data === null){
                throw new \ErrorException("Variable \$data content error ! \$data is empty or null.");
            }
            else{
                $queryBuilder->andWhere($queryBuilder->expr()->in('a.' . $fieldName, $data));
            }          
        }
        return $queryBuilder;    
    }
    
    /**
     * Function which allow user to find any object in the database
     * @param array $filter Parameter which contains the matching between keys and value you want to input into your DQL request
     * @param array $keys Parameter which contains all the keys you have already wished to input into your DQL request
     * @param \Doctrine\ORM\EntityRepository $repository Instance of \Doctrine\ORM\EntityRepository of the targeted entity
     * @return \Doctrine\Common\Collections\ArrayCollection
     * @throws \ErrorException
     */
    public function findObject($filter, $keys, $repository){
        
        if(is_a($repository, 'Doctrine\ORM\EntityRepository')){
            $queryBuilder = $repository->createQueryBuilder('a')->select('a');
        }
        else{
            throw new \ErrorException("Variable \$repository type error ! Expected type : Doctrine\ORM\EntityRepository.");
        }
        
        if (!is_array($filter)){
            throw new \ErrorException("Variable \$filter type error ! Expected type : Array.");
        }
        else{
            try{
                
                foreach($keys as $key){
                    if(array_key_exists($key, $filter) && $filter[$key] != null){
                        try{
                            $queryBuilder = $this->queryAddWhereIn($queryBuilder, $key, $filter[$key]); 
                        } 
                        catch (Exception $ex) {
                            echo "Exception thrown : " + $ex->getMessage();
                        }
                    }
                }

                $queryBuilder->setMaxResults(21000 );
                
                $query = $queryBuilder->getQuery();
                
                if (empty($query) || $query === null){
                    throw new \ErrorException("Variable \$query error ! Expected type : Doctrine\ORM\QueryBuilder.");
                }
                else{
                    return $query->getResult();
                }                 
                
            } 
            catch (Exception $e) {
                echo "Exception thrown : " + $e->getMessage();
            }      
        }
    }
    
    /**
     * Function which will build your collection of objects ready to return to front-office
     * @param \Doctrine\Common\Collections\ArrayCollection $queryResult
     * @param \Doctrine\ORM\EntityRepository $repository
     * @return array Array of data concerning the entity you have selected
     * @throws \ErrorException
     */
    public function objectDataBuilder($queryResult, $repository){
        
        $myObjects = array();
        
        if(is_array($queryResult)){
            
            if (is_a($repository, 'Doctrine\ORM\EntityRepository')){
                foreach($queryResult as $object){
                    try{
                        $objectId = $object->getId();
                        $myObjects[$objectId] = $repository->singleObjectBuilder($object);
                    } 
                    catch (Exception $ex) {
                        echo "Exception thrown : " + $ex->getMessage();
                    }
                }
            }
            else{
                throw new \ErrorException('Variable \$repository type error ! Expected type : Doctrine\ORM\EntityRepository object.');
            } 
            
        }
        else{
            throw new \ErrorException('Variable \$queryResult type error ! Expected type : Array.');
        }
        
        return $myObjects;
        
    }

}

