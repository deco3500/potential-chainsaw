$(document).ready(function(){
	var articleDoc = new XMLHttpRequest();
	articleDoc.onreadystatechange = function(){
		if(articleDoc.readyState == 4 && articleDoc.status == 200){
			loadArticlesXML(articleDoc);
		}
	};
	articleDoc.open("GET", "articles.xml", true);
	articleDoc.send();

	function findArticleOffset(){
		var clock = $('#clock');
    if(clock.hasClass("clockStarted")){
			return 0;
    }else if(clock.hasClass("clockFinished")){
			return 3;
    }else if(clock.hasClass("clockStarting")){
			return 6;
    }
	}

	function loadArticlesXML(doc){
		var articleOffset = findArticleOffset();
		var xmlArticles = doc.responseXML;
		var xmlArticle = xmlArticles.getElementsByTagName('article');
		var title = xmlArticle[0 + articleOffset].getElementsByTagName('title')[0].childNodes[0].nodeValue;
		var article = xmlArticle[0 + articleOffset].getElementsByTagName('text')[0].childNodes[0].nodeValue;
		document.getElementById("mainArticleTitle").innerHTML = title;
		document.getElementById("mainArticleText").innerHTML = article;
		var title = xmlArticle[1 + articleOffset].getElementsByTagName('title')[0].childNodes[0].nodeValue;
		var article = xmlArticle[1 + articleOffset].getElementsByTagName('text')[0].childNodes[0].nodeValue;
		document.getElementById("sub1ArticleTitle").innerHTML = title;
		document.getElementById("sub1ArticleText").innerHTML = article;
		var title = xmlArticle[2 + articleOffset].getElementsByTagName('title')[0].childNodes[0].nodeValue;
		var article = xmlArticle[2 + articleOffset].getElementsByTagName('text')[0].childNodes[0].nodeValue;
		document.getElementById("sub2ArticleTitle").innerHTML = title;
		document.getElementById("sub2ArticleText").innerHTML = article;
	}
});
