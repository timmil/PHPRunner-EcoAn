<?php
$strTableName="Price List Report";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="prodcosts";

$gstrOrderBy="ORDER BY prodcosts.ProdNo, prodcosts.CostType";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Price List Report");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Price List Report"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>