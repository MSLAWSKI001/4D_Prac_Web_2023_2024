function showArticle(articleID) {
    hideAllArticles()
    let article = document.getElementById(articleID)
    article.style.display= 'block'
}

function hideAllArticles() {
    let articles = document.getElementsByTagName('div')
    articles[0].style.display = 'none'
    articles[1].style.display = 'none'
    articles[2].style.display = 'none'
    articles[3].style.display = 'none'
}