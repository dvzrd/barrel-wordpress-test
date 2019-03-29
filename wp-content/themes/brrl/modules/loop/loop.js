/**
 * Initializes the loop.
 * @constructor
 * @param {Object} el - The site loop.
 */
import ScrollReveal from 'scrollreveal'

function Loop () {
  const posts = document.querySelectorAll('.post')
  var sr = ScrollReveal({ reset: true })
  sr.reveal('.post--loop', {duration: 900, scale: 1})

  Array.from(posts).filter(function (post) {
    return post.querySelector('.post--link') !== null
  }).forEach(function (post) {
    (() => new Post(post))()
  })
}

class Post {
  constructor (item) {
    this.item = item
    this.trigger = item.getElementsByClassName('post--link')
    this.item.addEventListener('mouseover', this.mouseOver.bind(this))
    this.item.addEventListener('mouseout', this.mouseOut.bind(this))
  }

  mouseOver () {
    this.item.classList.add('post--hover')
  }
  mouseOut () {
    this.item.classList.remove('post--hover')
  }
}

export default Loop
