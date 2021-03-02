var app = new Vue ({
  el: '#root',
  data: {
    cds: [],
    genreList: [],
    selectedGenre: 'All'
  },
  mounted() {
    axios
    .get('php-partials/server.php')
    .then(result => {
      this.cds = result.data;
      this.cds.forEach((e, i) => {
        if (!this.genreList.includes(e.genre)) {
          this.genreList.push(e.genre);
        }
      });
    });
  }
});
