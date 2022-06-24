const app = new Vue({
  el: '#app',
  data: {
    albums: [],
    currentGenre: 'All',
    filteredResponse: [],
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
  computed: {
    getGenres() {
      const genres = new Set();
      genres.add('All');
      this.albums.forEach((elm) => {
        genres.add(elm.genre);
      });
      console.log(genres);
      return Array.from(genres);
    },
  },
  created() {
    axios
      .get('http://localhost:8888/php-ajax-dischi/server/api.php')
      .then((response) => {
        this.albums = response.data;
      })
      .catch((error) => {
        console.log(error);
      });
  },
});
