var app = new Vue ({
  el: '#root',
  data: {
    cds: []
  },
  mounted() {
    axios
    .get('php-partials/server.php')
    .then(result => {
      this.cds = result.data;
      console.log(result.data);
    });
  }
});
