
  async function fetchSingleBlogPost() {
    const urlParams = new URLSearchParams(window.location.search);
    const postId = urlParams.get('id');

    if (postId) {
        const response = await fetch('assets/js/posts.json'); 
      const data = await response.json();

      const post = data.find(item => item.id === parseInt(postId));

      if (post) {
        const template = `
          <div class="col-md-12">
            <div class="block-main mb-30">
              <img src="${post.image}" class="img-responsive" alt="reviews2">
              <div class="content-main single-post padDiv">
                <div class="journal-txt">
                  <h4><a href="#">${post.title}</a></h4>
                </div>
                <div class="post-meta">
                  <ul class="list-unstyled mb-0">
                    <li class="author">by: <a href="#">${post.author}</a></li>
                    <li class="date">date: <a href="#">${post.date}</a></li>
                  </ul>
                </div>
                <div id="postContent">
                  ${post.content.map(paragraph => `<p>${paragraph}</p>`).join('')}
                </div>
              </div>
            </div>
          </div>
        `;

        document.querySelector(".single-main").innerHTML = template;
      }
    }
  }

  window.onload = () => {
    fetchSingleBlogPost();
  };

