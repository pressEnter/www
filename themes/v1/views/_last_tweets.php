<script charset="utf-8" src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 4,
  interval: 30000,
  width: 280,
  height: 330,
  theme: {
    shell: {
      background: '#c3c3c3',
      color: '#0199AE'
    },
    tweets: {
      background: '#ffffff',
      color: '#454545',
      links: '#0199AE'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    behavior: 'all'
  }
}).render().setUser('docksud').start();
</script>
