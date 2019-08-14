<php
	class C{
		echo "方法名称是", $name.<p>;
		echo "参数存在个数:", count($num), "<p>";
		if(count($num))==1{
			echo $this->list1($a);
		}
		if(count($num))==2{
			echo $this->list2($a, $b);
		}

		public function list1($a){
			return '这是list1函数';
		}

		public function list2($a, $b){
			return '这是list2函数';
		}
	}
	$a=new C;
	$a->listshow(1,2);
?>