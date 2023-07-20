<?php
class Owner implements JsonSerializable{
	public $id;
	public $name;
	public $mobile;
	public $email;
	public $address;
	public $photo;
	public $created_at;
	public $updated_at;

	public function __construct(){
	}
	public function set($id,$name,$mobile,$email,$address,$photo,$created_at,$updated_at){
		$this->id=$id;
		$this->name=$name;
		$this->mobile=$mobile;
		$this->email=$email;
		$this->address=$address;
		$this->photo=$photo;
		$this->created_at=$created_at;
		$this->updated_at=$updated_at;

	}
	public function save(){
		global $db,$tx;
		$db->query("insert into {$tx}owners(name,mobile,email,address,photo,created_at,updated_at)values('$this->name','$this->mobile','$this->email','$this->address','$this->photo','$this->created_at','$this->updated_at')");
		return $db->insert_id;
	}
	public function update(){
		global $db,$tx;
		$db->query("update {$tx}owners set name='$this->name',mobile='$this->mobile',email='$this->email',address='$this->address',photo='$this->photo',created_at='$this->created_at',updated_at='$this->updated_at' where id='$this->id'");
	}
	public static function delete($id){
		global $db,$tx;
		$db->query("delete from {$tx}owners where id={$id}");
	}
	public function jsonSerialize(){
		return get_object_vars($this);
	}
	public static function all(){
		global $db,$tx;
		$result=$db->query("select id,name,mobile,email,address,photo,created_at,updated_at from {$tx}owners");
		$data=[];
		while($owner=$result->fetch_object()){
			$data[]=$owner;
		}
			return $data;
	}
	public static function pagination($page=1,$perpage=10,$criteria=""){
		global $db,$tx;
		$top=($page-1)*$perpage;
		$result=$db->query("select id,name,mobile,email,address,photo,created_at,updated_at from {$tx}owners $criteria limit $top,$perpage");
		$data=[];
		while($owner=$result->fetch_object()){
			$data[]=$owner;
		}
			return $data;
	}
	public static function count($criteria=""){
		global $db,$tx;
		$result =$db->query("select count(*) from {$tx}owners $criteria");
		list($count)=$result->fetch_row();
			return $count;
	}
	public static function find($id){
		global $db,$tx;
		$result =$db->query("select id,name,mobile,email,address,photo,created_at,updated_at from {$tx}owners where id='$id'");
		$owner=$result->fetch_object();
			return $owner;
	}
	static function get_last_id(){
		global $db,$tx;
		$result =$db->query("select max(id) last_id from {$tx}owners");
		$owner =$result->fetch_object();
		return $owner->last_id;
	}
	public function json(){
		return json_encode($this);
	}
	public function __toString(){
		return "		Id:$this->id<br> 
		Name:$this->name<br> 
		Mobile:$this->mobile<br> 
		Email:$this->email<br> 
		Address:$this->address<br> 
		Photo:$this->photo<br> 
		Created At:$this->created_at<br> 
		Updated At:$this->updated_at<br> 
";
	}

	//-------------HTML----------//

	static function html_select($name="cmbOwner"){
		global $db,$tx;
		$html="<select id='$name' name='$name'> ";
		$result =$db->query("select id,name from {$tx}owners");
		while($owner=$result->fetch_object()){
			$html.="<option value ='$owner->id'>$owner->name</option>";
		}
		$html.="</select>";
		return $html;
	}
	static function html_table($page = 1,$perpage = 10,$criteria="",$action=true){
		global $db,$tx;
		$count_result =$db->query("select count(*) total from {$tx}owners $criteria ");
		list($total_rows)=$count_result->fetch_row();
		$total_pages = ceil($total_rows /$perpage);
		$top = ($page - 1)*$perpage;
		$result=$db->query("select id,name,mobile,email,address,photo,created_at,updated_at from {$tx}owners $criteria limit $top,$perpage");
		$html="<table class='table'>";
			$html.="<tr><th colspan='3'><a class=\"btn btn-success\" href=\"create-owner\">New Owner</a></th></tr>";
		if($action){
			$html.="<tr><th>Id</th><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th><th>Photo</th><th>Created At</th><th>Updated At</th><th>Action</th></tr>";
		}else{
			$html.="<tr><th>Id</th><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th><th>Photo</th><th>Created At</th><th>Updated At</th></tr>";
		}
		while($owner=$result->fetch_object()){
			$action_buttons = "";
			if($action){
				$action_buttons = "<td><div class='clearfix' style='display:flex;'>";
				$action_buttons.= action_button(["id"=>$owner->id, "name"=>"Details", "value"=>"Details", "class"=>"info", "url"=>"details-owner"]);
				$action_buttons.= action_button(["id"=>$owner->id, "name"=>"Edit", "value"=>"Edit", "class"=>"primary", "url"=>"edit-owner"]);
				$action_buttons.= action_button(["id"=>$owner->id, "name"=>"Delete", "value"=>"Delete", "class"=>"danger", "url"=>"owners"]);
				$action_buttons.= "</div></td>";
			}
			$html.="<tr><td>$owner->id</td><td>$owner->name</td><td>$owner->mobile</td><td>$owner->email</td><td>$owner->address</td><td><img src="img/$owner->photo" width="100" /></td><td>$owner->created_at</td><td>$owner->updated_at</td> $action_buttons</tr>";
		}
		$html.="</table>";
		$html.= pagination($page,$total_pages);
		return $html;
	}
	static function html_row_details($id){
		global $db,$tx;
		$result =$db->query("select id,name,mobile,email,address,photo,created_at,updated_at from {$tx}owners where id={$id}");
		$owner=$result->fetch_object();
		$html="<table class='table'>";
		$html.="<tr><th colspan=\"2\">Owner Details</th></tr>";
		$html.="<tr><th>Id</th><td>$owner->id</td></tr>";
		$html.="<tr><th>Name</th><td>$owner->name</td></tr>";
		$html.="<tr><th>Mobile</th><td>$owner->mobile</td></tr>";
		$html.="<tr><th>Email</th><td>$owner->email</td></tr>";
		$html.="<tr><th>Address</th><td>$owner->address</td></tr>";
		$html.="<tr><th>Photo</th><td><img src="img/$owner->photo" width="100" /></td></tr>";
		$html.="<tr><th>Created At</th><td>$owner->created_at</td></tr>";
		$html.="<tr><th>Updated At</th><td>$owner->updated_at</td></tr>";

		$html.="</table>";
		return $html;
	}
}
?>
