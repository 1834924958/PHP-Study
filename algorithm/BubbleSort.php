<?php
/**
 * 冒泡排序
 * 基本思路
 * 将被排序的记录数组R[1..n]垂直排列，
 * 每个记录R[i]看作是重量为R[i].key的气泡。
 * 根据轻气泡不能在重气泡之下的原则，
 * 从下往上扫描数组R：
 * 凡扫描到违反本原则的轻气泡，就使其向上"飘浮"。
 * 如此反复进行，
 * 直到最后任何两个气泡都是轻者在上，重者在下为止。
 */
function bubbleSort(array $list)
{
	$length = count($list);
	for($i = 0; $i < $length; $i++){
		for($j = $i + 1; $j < $length; $j++){
			if($list[$j] < $list[$i]){
				$temp = $list[$i];
				$list[$i] = $list[$j];
				$list[$j] = $temp;
			}
		}
		var_dump($list);
		echo '<br>';
	}
	return $list;
}
$list = array(3, 6, 2, 4, 10, 1 ,9, 8, 5, 7);
echo '<pre>';
var_dump(bubbleSort($list));
echo '</pre>';