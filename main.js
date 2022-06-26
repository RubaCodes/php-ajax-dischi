const app = new Vue({
  el: '#app',
  data: {
    albums: [],
    currentGenre: 'All',
    allGenres: [],
  },
  methods: {
    genreFilter() {
      axios
        .get('http://localhost:8888/php-ajax-dischi/server/api.php?', {
          params: {
            genre: this.currentGenre,
          },
        })
        .then((response) => {
          this.albums = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
  created() {
    //fetch database album
    axios
      .get('http://localhost:8888/php-ajax-dischi/server/api.php?', {
        params: {
          genre: this.currentGenre,
        },
      })
      .then((response) => {
        this.albums = response.data;
      })
      .catch((error) => {
        console.log(error);
      });
    //fetch tutti generi
    axios
      .get('http://localhost:8888/php-ajax-dischi/server/api.php?', {
        params: {
          fetchGenres: true,
        },
      })
      .then((response) => {
        this.allGenres = response.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
});
