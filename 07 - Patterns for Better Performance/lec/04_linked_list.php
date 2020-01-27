<?php

# Linked List

Class ListNode {
	public $data;
	public $next;

	public function __construct () {
		$this->data = null;
		$this->next = null;
	}
}


$node1 = new ListNode();
$node1->data = "NODE 1";

$node2 = new ListNode();
$node2->data = "NODE 2";

$node3 = new ListNode();
$node3->data = "NODE 3";

$node2->next = $node3;
$node1->next = $node2;
$node3->next = null;

// $current = $node1;
// while (!is_null($current->next)) {
// 	echo $current->data . "<br>";
// 	$currnet = $current->next;
// }

$current = $node1;
while (!empty($current)) {
	$current = $current->next;
}

var_dump($node1);

?>