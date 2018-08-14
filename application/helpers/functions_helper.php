<?php
function store_url($path=""){
	return base_url($path);
}
function resource_url($path=""){
	return store_url("resource/".$path);
}

function admin_url($path=""){
	return store_url("admin/".$path);
}

function template_url($path=""){
	
	if(defined("ADMIN")){
		return store_url("template/admin/".$path);
	}else{
		return store_url("template/default/".$path);
	}
	

}

