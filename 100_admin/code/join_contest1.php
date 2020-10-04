<?php
error_reporting(0);
session_start();
require_once "../db/config.php";
$user = '42004'; //matchid
$email= $_POST['$amount3']; //contestid
$pass5='100'; //number of teams
$pass56='1'; //multi - single

$jingal=0;
$tytttttt=0;
$randtt156565=array(1,2,3,4);

$qry3345="SELECT email FROM `user` where status=3";
$result3345=mysqli_query($conn,$qry3345);
while($rows33456=mysqli_fetch_assoc($result3345))
{
	$usssrs=$rows33456['email'];
 
	$qry334="SELECT * FROM user_team where match_id='$user' and user_id='$usssrs'";
	$result334=mysqli_query($conn,$qry334);
	$rows334=mysqli_num_rows($result334);
	if($rows334>=1)
	{  
		// echo $qry334; 
	}else
	{
		if($usssrs>0)
		{
			$randtt156565[$tytttttt]=$usssrs;
			$tytttttt++;
		}  
	}
}

if($tytttttt>$pass5)
{
	for($i=0;$i<$pass5;$i++)
	{ 
		$randtt222=array(1,2);
		$randtt2=array(1.5,2.5);
		$randtt1=array(1,2);
		$randct1=0;
        
		$crett1234 = array(1,2); 
		$crett1 = array(1.5,2.5); 
		$crett12=0;
	   
		$pidtt1 = array(1,2); 
		$pidtt12=0;
	   
		$totaltt1=0.0;
 
		$matchqry="SELECT `mat_team1_id`,`mat_team2_id` FROM `API_matches` WHERE `mat_id`='$user'";
		$matchresult=mysqli_query($conn,$matchqry);
		$matchrows=mysqli_fetch_assoc($matchresult);
		$t1=$matchrows['mat_team1_id'];
		$t2=$matchrows['mat_team2_id'];

		$sql1="SELECT sqd_ply11_ids FROM API_match_squad WHERE sqd_team_id='$t1' AND sqd_mat_id='$user'";
		$qer1=mysqli_query($conn,$sql1);
		$res1=mysqli_fetch_assoc($qer1);
		$plyrs1=$res1['sqd_ply11_ids'];
		//echo "SELECT * FROM API_players WHERE ply_id IN ($plyrs1)";die;
		$plyrs11=explode(",",$plyrs1);
		$sql2="SELECT sqd_ply11_ids FROM API_match_squad WHERE sqd_team_id='$t2' AND sqd_mat_id='$user'";
		$qer2=mysqli_query($conn,$sql2);
		$res2=mysqli_fetch_assoc($qer2);
		$plyrs2=$res2['sqd_ply11_ids'];
		$plyrs21=explode(",",$plyrs2);
		//$plyrs=array_merge($plyrs1,$plyrs2);
		$plyrs=$plyrs1.','.$plyrs2;
		$qry="SELECT ply_id,ply_shortName,ply_role,ply_fantasy_points FROM API_players WHERE ply_role='wk' AND ply_id IN ($plyrs)";
		$result=mysqli_query($conn,$qry);
		$rows=mysqli_num_rows($result);
		while($rows=mysqli_fetch_assoc($result))
		{
			$pppoint=$rows['ply_fantasy_points'];
			$pid=$rows['ply_id'];
			if (in_array($pid, $plyrs11))
			{
				$pppoint123=$t1;
			}else{
				$pppoint123=$t2;
			}

			$randtt1[$randct1]=$pid;
			$randtt2[$randct1]=$pppoint;
			$randtt222[$randct1]=$pppoint123;
			$randct1++;
		}

		for($u=0;$u<1;$u++)
		{
			$yuttt=sizeof($randtt1)-1;
			$k=rand(0,$yuttt);
			$v = $randtt1[$k];
			$pidtt1[$pidtt12]=$v;
			$crett1[$pidtt12]=$randtt2[$k];
			$crett1234[$pidtt12]=$randtt222[$k];
			$pidtt12++;
		}
		$randct1=0;
		$randtt2=array(1.5,2.5);
		$randtt1=array(1,2);
		$qry="SELECT ply_id,ply_shortName,ply_role,ply_fantasy_points FROM API_players WHERE ply_role='bat' AND ply_id IN ($plyrs)";
		$result=mysqli_query($conn,$qry);
		$rows=mysqli_num_rows($result);
		while($rows=mysqli_fetch_assoc($result))
		{
			$pppoint=$rows['ply_fantasy_points'];
			$pid=$rows['ply_id'];
			if (in_array($pid, $plyrs11))
			{
				$pppoint123=$t1;
			}else{
				$pppoint123=$t2;
			}

			$randtt222[$randct1]=$pppoint123;
			$randtt1[$randct1]=$pid;
			$randtt2[$randct1]=$pppoint;
			$randct1++;
		}
		$vyt=rand(3,5);
		for($u=0;$u<$vyt;$u++)
		{
			$yuttt=sizeof($randtt1)-1;
			$k=rand(0,$yuttt);
			$v = $randtt1[$k];
			$systatus=0;
			for($aaa=0;$aaa<sizeof($pidtt1);$aaa++)
			{
				if($v==$pidtt1[$aaa])
				{
					$systatus=1;
					break;
				}   
			}
			if($systatus==1)
			{
			   $u--; 
			}
			else
			{
				$pidtt1[$pidtt12]=$v;
				$crett1[$pidtt12]=$randtt2[$k];
				$crett1234[$pidtt12]=$randtt222[$k];
				$pidtt12++;
			}
		}

		$randct1=0;
		$randtt2=array(1.5,2.5);
		$randtt1=array(1,2); 
		$qry="SELECT ply_id,ply_shortName,ply_role,ply_fantasy_points FROM API_players WHERE ply_role='all' AND ply_id IN ($plyrs)";
		$result=mysqli_query($conn,$qry);
		$rows=mysqli_num_rows($result);
		while($rows=mysqli_fetch_assoc($result))
		{
			$pppoint=$rows['ply_fantasy_points'];
			$pid=$rows['ply_id'];
			if (in_array($pid, $plyrs11))
			{
				$pppoint123=$t1;
			}else{
				$pppoint123=$t2;
			}

			$randtt222[$randct1]=$pppoint123;
			$randtt1[$randct1]=$pid;
			$randtt2[$randct1]=$pppoint;
			$randct1++;
		}
		$vyt=1; 
		if($pidtt12==6)
		{
			$vyt=rand(1,2); 
		}else
		{
			$vyt=rand(2,3);
		}

		for($u=0;$u<$vyt;$u++)
		{
			$yuttt=sizeof($randtt1)-1;
			$k=rand(0,$yuttt);
			$v = $randtt1[$k];
			$systatus=0;
			for($aaa=0;$aaa<sizeof($pidtt1);$aaa++)
			{
				if($v==$pidtt1[$aaa])
				{
					$systatus=1;
					break;
				}   
			}

			if($systatus==1)
			{
			   $u--; 
			}else
			{
				$pidtt1[$pidtt12]=$v;
				$crett1[$pidtt12]=$randtt2[$k];
				$crett1234[$pidtt12]=$randtt222[$k];
				$pidtt12++;
			}
		}
		$randct1=0;
		$randtt2=array(1.5,2.5);
		$randtt1=array(1,2);
		$qry="SELECT ply_id,ply_shortName,ply_role,ply_fantasy_points FROM API_players WHERE ply_role='bowl' AND ply_id IN ($plyrs)";
		$result=mysqli_query($conn,$qry);
		$rows=mysqli_num_rows($result);
		while($rows=mysqli_fetch_assoc($result))
		{
			$pppoint=$rows['ply_fantasy_points'];
			$pid=$rows['ply_id'];
			if (in_array($pid, $plyrs11))
			{
				$pppoint123=$t1;
			}else{
				$pppoint123=$t2;
			}

			$randtt222[$randct1]=$pppoint123;
			$randtt1[$randct1]=$pid;
			$randtt2[$randct1]=$pppoint;
			$randct1++;
		}
		$vyt=3; 
		if($pidtt12==6)
		{
			$vyt=5; 
		}else if($pidtt12==7)
		{
			$vyt=4;
		}else if($pidtt12==8)
		{
			$vyt=3;
		}
		for($u=0;$u<$vyt;$u++)
		{
			$yuttt=sizeof($randtt1)-1;
			$k=rand(0,$yuttt);
			$v = $randtt1[$k];
			$systatus=0;
			for($aaa=0;$aaa<sizeof($pidtt1);$aaa++)
			{
				if($v==$pidtt1[$aaa])
				{
					$systatus=1;
					break;
				}   
			}
			if($systatus==1)
			{
			   $u--; 
			}
			else
			{
				$pidtt1[$pidtt12]=$v;
				$crett1[$pidtt12]=$randtt2[$k];
				$crett1234[$pidtt12]=$randtt222[$k];
				$pidtt12++;
			}
		}
		$tryeu="";
		for($ij=0;$ij<$pidtt12-1;$ij++)
		{
			$tryeu=$tryeu.$pidtt1[$ij].",";
		}
		$tryeu=$tryeu.$pidtt1[$pidtt12-1];
		$uiyoy=rand(0,10);
		$uiyoy1=rand(0,10);
		while($uiyoy==$uiyoy1)
		{
			$uiyoy1=rand(0,10);  
		}
		$cyu=$pidtt1[$uiyoy];
		$vcyu=$pidtt1[$uiyoy1];

		for($ij=0;$ij<$pidtt12;$ij++)
		{
		   
			$totaltt1=$totaltt1+$crett1[$ij];

		}
		$tota1111=$crett1234[0];
		$tota1112=0;
		$tota1111count=1;
		for($ij=1;$ij<$pidtt12;$ij++)
		{
		   if($tota1111==$crett1234[$ij])
		   {
			   $tota1111count++;
		   }
		   
		}
		if($totaltt1>100||($tota1111count<4||$tota1111count>7))
		{
			$i=$i-1;   
		}else
		{
			$diff1=0;
			$qry33="SELECT `contests_id`, `amount`, `no_of_teams`, `fee` FROM `contests` where contests_id='$email'";
			$result33=mysqli_query($conn,$qry33);
			$rows33=mysqli_num_rows($result33);
			while($rows33=mysqli_fetch_assoc($result33))
			{  
				$no_of_teams=$rows33['no_of_teams'];
			}
			$qry2="SELECT count(*) as cont1 FROM `matches_joined` where  contests_id='$email'  and  `match_id`='$user'";
			$result2=mysqli_query($conn,$qry2);
			$rows2=mysqli_num_rows($result2);
			while($rows2=mysqli_fetch_assoc($result2))
			{
				$contest_id111=$rows2['cont1'];
				$diff1=  $no_of_teams - $contest_id111;
			}
			if($diff1<=0)
			{
				
			}
			else
			{
				//echo $tryeu;
				$tryeu=explode(",",$tryeu);
				//$array_without_strawberries = array_diff($tryeu, array($cyu));
				//$array_without_strawberries = unset($tryeu[array_search('$cyu',$tryeu)]);
				/* $key = array_search($cyu, $tryeu);
				unset($tryeu[$key]);
				$key = array_search($vcyu, $tryeu);
				unset($tryeu[$key]); */
				//print_r($tryeu);
				//$myvar=serialize($tryeu);//print_r($myvar);
				//$tryeu = implode(',', $tryeu);
				//echo $tryeu;
				foreach($tryeu as $tval)
				{
					//echo $tpid=$tkey;
					//echo $tval.'<br>';
					if(in_array($tval, $plyrs11))
					{
						$newarr1[]=$tval;
					}else{
						$newarr2[]=$tval;
					}
				}
				//print_r($newarr1);echo "<br>";print_r($newarr2);
				$players = array();
				$players[$t1] = $newarr1; //should be in array format, and count of ids must be 4/5/6/7
				$players[$t2] = $newarr2; //should be in array format, and count of ids must be 4/5/6/7
				$players = serialize(json_encode($players));//print_r($players);
		
				$usssrs12=$randtt156565[$i];  
				$count11134=rand(1,6);  
				$insert="INSERT INTO `user_team`(`user_id`, `match_id`, `players`, `caption`, `vice_caption`, `user_team_number`) VALUES ('$usssrs12','$user','$players','$cyu','$vcyu','$count11134')";
		
				$result1 = mysqli_query($conn,$insert);
				$players = array();
				$newarr1 = array();
				$newarr2 = array();
				$query11="SELECT user_team_id FROM `user_team` WHERE `user_id`='$usssrs12' and `match_id`='$user'";
				$result11=mysqli_query($conn,$query11);
				$rows11=mysqli_num_rows($result11);
				$rows11 = mysqli_fetch_assoc($result11);
				$count111=$rows11['user_team_id'];
				$contest_id111++;
				$query="INSERT INTO `matches_joined`(`user_id`, `match_id`, `team_id`, `contests_id`, `no_of_join`) VALUES ('$usssrs12','$user','$count111','$email','$contest_id111')";
				$result=mysqli_query($conn,$query);
				
			}
		}
	}
	$_SESSION['TYPE'] = "1";
	header("location: ../views/match_live");
}
else{
	$_SESSION['TYPE'] = "0";
	header("location: ../views/match_live");
}
?>