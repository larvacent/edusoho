<?php

namespace Topxia\Api\Filter;

class ExerciseFilter implements Filter
{
    //输出前的字段控制
    public function filter(array &$data)
    {
        $data['createdTime'] = date('c', $data['createdTime']);

        return $data;
    }

    public function filters(array &$datas)
    {
        $num = 0;
        $results = array();
        foreach ($datas as $data) {
            $results[$num] = $this->filter($data);
            $num++;
        }
        return $results;
    }

}

