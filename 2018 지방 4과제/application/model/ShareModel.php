<?php
	class ShareModel extends Model {

		// 내부 공유
		function in($fidx, $midx){
			$this->sql = "INSERT INTO in_list SET fidx = '{$fidx}', midx = '{$midx}', s_date = now()";
			$this->query();
			alert("공유 되었습니다");
			move("/file?parent=".$_GET['parent']);
		}

		// 외부 공유
		function out($fidx, $midx){
			$keycode = "798465132azwsxedcrfvtygbuhnjmikoplQAZWXSEDCRFVTGBYHNUJMIKLP";
			$len = strlen($keycode);
			while (1) {
				$ukey = "";
				for ($i=0; $i < 4; $i++) { 
					$ukey .= $keycode[rand(0,$len - 1)];
					if($this->cnt("SELECT * FROM out_list where ukey = '{$ukey}'")) continue;
					if(preg_match("/[0-9]{1,2}[a-z]{1,2}[A-Z]{1,2}/", $ukey)) break;
				}
			}
			$this->sql = "INSERT INTO out_list SET fidx = '{$fidx}', midx = '{$midx}', s_date = now(), ukey = '{$ukey}'";
			$this->query();
			alert("공유 되었습니다");
			move("/file?parent=".$_GET['parent']);
		}
	}