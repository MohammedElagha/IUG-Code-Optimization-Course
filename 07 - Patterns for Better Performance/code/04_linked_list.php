<?php

Class ListNode {
	public $data;
	public $next;

	public function __construct () {
		$data = null;
		$next = null;
	}
}


$node_1 = new ListNode();
$node_1->data = "NODE 1";

$node_2 = new ListNode();
$node_2->data = "NODE 2";

$node_3 = new ListNode();
$node_3->data = "NODE 3";

$node_1->next = $node_2;
$node_2->next = $node_3;

# Iteration

$next = $node_1;
while (!is_null($next)) {
	echo $next->data . "<br>";
	$next = $next->next;
}

?>