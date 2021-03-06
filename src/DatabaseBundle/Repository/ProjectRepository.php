<?php

/**
 * @author Sébastien FRANÇOIS francois.sebastien.emile@gmail.com
 */

namespace DatabaseBundle\Repository;

use Doctrine\ORM\EntityRepository;
use CoreBundle\CommonClass\Common;

/**
 * ProjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectRepository extends EntityRepository
{
    /**
     * 
     * @param int $value
     * @return mixed[]
     */
    public function countProjectOnCountry($value){
        return $this->createQueryBuilder('a')
                    ->select('COUNT(a)')
                    ->where('a.country = :id')
                    ->setParameter('id', $value)
                    ->getQuery()
                    ->getSingleScalarResult();
    }
    
    /**
     * 
     * @param type $project
     * @return string
     * @throws \ErrorException
     */
    public function singleObjectBuilder($project){
        
        $myProject = array();
        
        $yearFormat = "Y";
        $monthYearFormat = "F, Y";
        $dateDefault = "Unknown";
        
        if(!empty($project) && $project !== null){
            
            $myProject['id'] = $project->getId();
            $myProject['name'] = $project->getProjectName();
            $myProject['area'] = $project->getCountry()->getGeographicalArea()->getGeographicalAreaName();
            $myProject['country'] = $project->getCountry()->getCountryName();
            $myProject['oilCompany'] = $project->getOilCompany()->getOilCompanyName();
            $myProject['operator'] = $project->getOperatorGroup()->getOperatorGroupName();
            $myProject['status'] = $project->getProjectStatus()->getProjectStatusName();
            $myProject['summary'] = $project->getSummary();
            
            if ($project->getProjectLevel() !== null){
                $myProject['projectLevel'] = $project->getProjectLevel();
            }
            else{
                $myProject['projectLevel'] = 0;
            }
            
            if ($project->getContractEndYear() != null){
                $date = $project->getContractEndYear()->format($yearFormat);
                $myProject['contractTiming'] = $date;
            }
            else{
                $myProject['contractTiming'] = $dateDefault;
            }
            if($project->getContractStartDate() != null){
                    $startYear = $project->getContractStartDate()->format($yearFormat);
                    $myProject['startYear'] = $startYear;
            }
            else{
                $myProject['startYear'] = $dateDefault;
            }
            if ($project->getNextTenderIssue() != null){
                $date = $project->getNextTenderIssue()->format($monthYearFormat);
                $myProject['tenderOutDate'] = $date;
            }
            else{
                $myProject['tenderOutDate'] = $dateDefault;
            }
            if ($project->getNextTenderClosed() != null){
                $date = $project->getNextTenderClosed()->format($monthYearFormat);
                $myProject['tenderClosureDate'] = $date;
            }
            else{
                $myProject['tenderClosureDate'] = $dateDefault;
            }
            if ($project->getContractAward() != null){
                $date = $project->getContractAward()->format($monthYearFormat);
                $myProject['tenderAwardDate'] = $date;
            }
            else{
                $myProject['tenderAwardDate'] = $dateDefault;
            }
            if ($project->getHelicopterOpsDate() != null){
                $date = $project->getHelicopterOpsDate()->format($yearFormat);
                $myProject['tenderTiming'] = $date;
            }
            else{
                $myProject['tenderTiming'] = $dateDefault;
            }
            if($project->getGeophysicsDate() != null){
                $date = $project->getGeoPhysicsDate()->format($yearFormat);
                $myProject['geophysics'] = $date;
                $projectTimingDate = $myProject['geophysics'];
            }
            else{
                $myProject['geophysics'] = $dateDefault;
                $projectTimingDate = $dateDefault;
            }
            if($project->getLicensingDate() != null){
                $date = $project->getLicensingDate()->format($yearFormat);
                $myProject['licensing'] = $date;
            }
            else{
                $myProject['licensing'] = $dateDefault;
            }
            if($project->getDrillingDate() != null){
                $date = $project->getDrillingDate()->format($yearFormat);
                $myProject['drilling'] = $date;
                $projectTimingDate = $myProject['drilling'];
            }
            else{
                $myProject['drilling'] = $dateDefault;
            }
            if($project->getFidDate() != null){
                $date = $project->getFidDate()->format($yearFormat);
                $myProject['fid'] = $date;
                $projectTimingDate = $myProject['fid'];
            }
            else{
                $myProject['fid'] = $dateDefault;
            }
            if($project->getDiscoveryDate() != null){
                $date = $project->getDiscoveryDate()->format($yearFormat);
                $myProject['discovery'] = $date;
                $projectTimingDate = $myProject['discovery'];
            }
            else{
                $myProject['discovery'] = $dateDefault;
            }
            if($project->getDevelopmentDate() != null){
                $date = $project->getDevelopmentDate()->format($yearFormat);
                $myProject['development'] = $date;
                $projectTimingDate = $myProject['development'];
            }
            else{
                $myProject['development'] = $dateDefault;
            }
            if ($project->getOperationalDate() != null){
                $date = $project->getOperationalDate()->format($yearFormat);
                $myProject['operational'] = $date;
                $projectTimingDate = $myProject['operational'];
            }
            else{
                $myProject['operational'] = $dateDefault;
            }
            $myProject['projectTiming'] = $projectTimingDate;
            if($project->getOptions() != null){
                $myProject['options'] = $project->getOptions() + " year(s)";
            }
            else{
                $myProject['options'] = "";
            }
            if($project->getOptionsComment() != null){
                $myProject['comment'] = $project->getOptionsComment();
            }
            else{
                $myProject['comment'] = "Missing initial comment";
            }
            if ($project->getConfidentialLink() != null){
                $myProject['confidentialLink'] = $project->getConfidentialLink();
            }
            else{
                $myProject['confidentialLink'] = null;
            }
            if ($project->getExternalLink() != null){
                $myProject['externalLink'] = $project->getExternalLink();
            }
            else{
                $myProject['externalLink'] = null;
            }
        }
        else{
            throw new \ErrorException('Variable \$project is empty or null.');
        }
        
        return $myProject;
        
    }
    
}
