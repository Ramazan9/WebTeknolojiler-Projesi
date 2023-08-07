

async function fetchBlogPosts() {
    const response = await fetch('assets/js/posts.json'); // Replace with your actual JSON file path
    const data = await response.json();

    const blogPostsContainer = document.getElementsByClassName('dynamic-posts')[0];

    data.forEach(post => {
        const postHTML = `
        <div class="col-lg-4 col-md-6">
          <div class="journal-info">
            <a href="blognews.html?id=${post.id}"><img src="${post.image}" class="img-responsive" alt="img"></a>
            <div class="journal-txt">
              <h4><a href="blognews.html?id=${post.id}">${post.title}</a></h4>
            </div>
          </div>
        </div>
        `;

        blogPostsContainer.insertAdjacentHTML('beforeend', postHTML);
    });
}

// Call the fetchBlogPosts function when the page loads
window.onload = () => {
    fetchBlogPosts();
};