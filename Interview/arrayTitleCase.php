<?php

/**
 *对一个二维数组的值首字母进行大写
 *array_keys():返回数组中部分的所有的键名
 *array_values():返回数组中所有的值
 *ucfirst():将字符串的首字母转换为大写
 */
function arrayTitleCase(array $array)
{
	$arr = [];
	foreach($array as $k => $v){
		$keys = array_keys($v);
		print_r($keys);
		$values = array_values($v);
		print_r($values);
		foreach($keys as $kk => $vv){
			$arr[$k][$vv] = ucfirst($values[$kk]);
		}
	}
	return $arr;
}
$array = [
	['name' => 'chenxi','title' => 'ches'],
	['name' => 'ye1209mx','title' => 'Hello'],
];
echo '<pre>';
print_r(arrayTitleCase($array));
echo '<pre>';