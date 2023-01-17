let parent = document.getElementsByClassName('feed-grid');
fetch('https://newsdata.io/api/1/news?country=ru&apikey=pub_11341490fe5c71acbd53e54be978330ebeaad')
  .then(res => res.json())
  .then(res => {
    const data = res.results;
    console.log(data);
    data.forEach((element, id) => {
      let div = document.createElement('div')
      div.innerHTML = `
      <div class="card-half wide">
          <div class="card-img">
              <p id="img_${id}"></p>
          </div>
          <div class="card-text ">
              <h1 id="title_${id}"> </h1>
              <p id="description_${id}"></p>
              <p id="author_${id}"></p>
              <p class="btn" id="url_${id}"></p>
          </div>
      </div>
`
      console.log(id, element.title )
      
        document.getElementById('feed-grid').appendChild(div)
        document.getElementById("title_" + id).innerHTML = element.title;
        document.getElementById("description_" + id).innerHTML = element.pubDate;
        
        document.getElementById("author_" + id).innerHTML = element.creator;
        document.getElementById("url_" + id).innerHTML = `<a class="btn" href=${element.link}>Подробнее</a>`
      
    });
  })
  