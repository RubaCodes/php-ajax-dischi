const app = new Vue({
  el: '#app',
  data: {
    albums: [],
  },
  methods: {},

  computed: {
    getGenres() {
      const genres = new Set();
      this.albums.forEach((elm) => {
        genres.add(elm.genre);
      });
      console.log(genres);
      return genres;
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
  mounted() {
    this.getGenres;
  },
});
