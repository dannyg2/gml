<template>
  <div class="container">
    <h1>User</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="integer" v-model="user.name" class="form-control" />
          <span v-if="errors['name']" class="text-danger">{{
            errors["name"][0]
          }}</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Apellidos</label>
          <input type="integer" v-model="user.last_name" class="form-control" />
          <span v-if="errors['last_name']" class="text-danger">{{
            errors["last_name"][0]
          }}</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Número de documento</label>
          <input
            type="integer"
            v-model="user.document_number"
            class="form-control"
          />
          <span v-if="errors['document_number']" class="text-danger">{{
            errors["document_number"][0]
          }}</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="integer" v-model="user.email" class="form-control" />
          <span v-if="errors['email']" class="text-danger">{{
            errors["email"][0]
          }}</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Pais</label>
          <select  v-model="user.country"  class="form-control">
            <option value="">Seleccionar</option>
            <option  v-for="country in countriesList " :key="country" :value="country.name.official">{{country.name.official}}</option>
          </select>
          <span v-if="errors['country']" class="text-danger">{{
            errors["country"][0]
          }}</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Dirección</label>
          <input type="integer" v-model="user.address" class="form-control" />
          <span v-if="errors['address']" class="text-danger">{{
            errors["address"][0]
          }}</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Movil</label>
          <input type="integer" v-model="user.movil" class="form-control" />
          <span v-if="errors['movil']" class="text-danger">{{
            errors["movil"][0]
          }}</span>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label class="form-label">Categoria</label>
         
          <select  v-model="user.category_id"  class="form-control">
            <option value="">Seleccionar</option>
            <option  v-for="category in categories " :key="category" :value="category.id">{{category.name}}</option>
          </select>
          <span v-if="errors['category_id']" class="text-danger">{{
            errors["category_id"][0]
          }}</span>
        </div>
      </div>
      <button class="btn btn-info btn-sm" @click="agregar">Guardar</button>
    </div>
  </div>
</template>
<script>
export default {
  components: {},
  data() {
    return {
      user: {},
      errors: [],
      countriesList:[],
      categories:[]
    };
  },
  methods: {
    categoriesAll(){
       this.axios
        .get("api/categories")
        .then((response) => {
          this.categories = response.data.data;
        })
        .catch((err) => (this.errors = err.response.data.errors));
    },
    countries(){
       this.axios
        .get("https://restcountries.com/v3.1/region/Americas")
        .then((response) => {
          this.countriesList = response.data;
        })
        .catch((err) => (this.errors = err.response.data.errors));
    },
    agregar() {
      this.axios
        .post("api/users", this.user)
        .then((response) => {
          this.user = {};
          this.$emit('reload');
        })
        .catch((err) => (this.errors = err.response.data.errors));
    },
  },
  created(){
    this.countries();
    this.categoriesAll();
  }
};
</script>