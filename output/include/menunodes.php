<?php
	// create menu nodes arr
	$menuNodesObject->menuNodes = array();
		
	if(!$menuNodesObject->isAdminTable()){
		$menuNode = array();
		$menuNode["id"] = "1";
		$menuNode["name"] = "Tables";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Tables";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "2";
		$menuNode["name"] = "History Tables";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "History Tables";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "3";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "producthistory";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Producthistory";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "4";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "componenthistory";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "2";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Componenthistory";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "5";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "components";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Components";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "6";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "componentusage";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Componentusage";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "7";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "comptype";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Comptype";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "8";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "costmodel";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Costmodel";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "9";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "fixedassyuse";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Fixedassyuse";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "10";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "fixedcomponents";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Fixedcomponents";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "11";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "mix";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Mix";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "12";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "mixregistry";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Mixregistry";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "13";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "prodgrp";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Prodgrp";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "14";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "productcolorcostjg";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Productcolorcostjg";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "15";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "products";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Products";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "16";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "status";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Status";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "17";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "units";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Units";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "18";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "unittype";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "1";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Unittype";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "19";
		$menuNode["name"] = "Views";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Views";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "20";
		$menuNode["name"] = "Reports";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Reports";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "21";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Components Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Components Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "22";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Fixed Components Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Fixed Components Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "23";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Product Group Prices Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Product Group Prices Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "24";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Input Products Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Input Products Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "25";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Labor Rates By Group Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Labor Rates By Group Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "26";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Mix Registry Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Mix Registry Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "27";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Price List Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Price List Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "28";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "Production Weight Report";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "20";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Report";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Production Weight Report";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "29";
		$menuNode["name"] = "Temporary Tables";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Temporary Tables";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "30";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "prodcosts";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "29";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Prodcosts";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "31";
		$menuNode["name"] = "Charts";
		$menuNode["href"] = "";
		$menuNode["type"] = "Group";
		$menuNode["table"] = "";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "None";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Charts";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "32";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "variables";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Variables";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "33";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "products Chart";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "Chart";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Products Chart";
		$menuNodesObject->menuNodes[] = $menuNode;
			$menuNode = array();
		$menuNode["id"] = "34";
		$menuNode["name"] = "";
		$menuNode["href"] = "mypage.htm";
		$menuNode["type"] = "Leaf";
		$menuNode["table"] = "buckets";
		$menuNode["style"] = "";
		$menuNode["params"] = "";
		$menuNode["parent"] = "0";
		$menuNode["nameType"] = "Text";
		$menuNode["linkType"] = "Internal";
		$menuNode["pageType"] = "List";
		$menuNode["openType"] = "None";
			$menuNode["title"] = "Buckets";
		$menuNodesObject->menuNodes[] = $menuNode;
			if($menuNodesObject->pageType == PAGE_MENU && IsAdmin())
		{
				}
	}else{
		//Admin Area menu items
	}	
	
?>
