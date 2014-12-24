<?php
function search_query($loc,$salary,$keyword,$cat)
{
	$search_query="select * from jobs where status=1 and ";
	$where_query=array();
	//location where clause
	if(!empty($loc))
		array_push($where_query,"location='$loc'");
	//salary where clause
	if(!empty($salary))
		array_push($where_query,"salary='$salary'");
	//keyword where clause
	if(!empty($keyword))
	{
		$keyword_arr=explode(',',$keyword);
		//print_r($keyword_arr);
		$keyword_array=array();
		if(!empty($keyword_arr))
		foreach($keyword_arr as $word)
		{
			array_push($keyword_array,"job_title LIKE '%$word%'");	
		}
		$keyword_where_clause=implode(' OR ',$keyword_array);
		array_push($where_query,$keyword_where_clause);
	}
	//category where clause
	if(!empty($cat))
	{
		array_push($where_query,"cat_id='$cat'");	
	}

	//SELECT * FROM `jobs`,job2cat WHERE job2cat.cat_id='1' and jobs.id=job2cat.job_id
	if(!empty($where_query))
		$where_clause=implode(' AND ',$where_query);
	$search_query.=$where_clause;
	return $search_query;
}


function view_filtered_jobs($search_query)
{
	if(!empty($search_query))
	{
		$res=mysql_query($search_query);
		if(mysql_affected_rows()>0)
		{
			echo "<table>";
			echo "<thead>
				<tr><th>Job Title</th><th>Company Name</th><th>Company Address</th><th>Location</th><th>Salary</th>
				</tr>";
			echo "</thead>";
			echo "<tbody>";
			while($row=mysql_fetch_row($res))
			{
				echo "<tr>
					<td><a href=index.php?con=postjob&job_id=$row[0]>$row[1]</a></td>
					
					<td>$row[3]</td>
					<td>$row[4]</td>
					<td>$row[5]</td>
					<td>$row[6]</td>
					</tr>";
			}
			echo "</tbody>";
			echo "</table>";
		}
		else
		{
			return $error="No job found";	
		}
	}	
}
?>