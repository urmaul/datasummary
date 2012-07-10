<?php

/**
 * @method IDataProvider getOwner()
 */
class DataSummaryBehavior extends CBehavior
{
    public function getPageSum($attributeName)
    {
        $data = $this->getOwner()->getData();
        
        $sum = 0;
        
        foreach ($data as $item) {
            $sum += $item->$attributeName;
        }
        
        return $sum;
    }
}
