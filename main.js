const app = new Vue({
  el: '#app',
  data: {
    albums: [],
    currentGenre: 'All',
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
      //condizione per no refresh dei generi

      const genres = new Set();
      genres.add('All');
      this.albums.forEach((elm) => {
        genres.add(elm.genre);
      });
      return Array.from(genres);
    },
  },
  created() {
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
});
