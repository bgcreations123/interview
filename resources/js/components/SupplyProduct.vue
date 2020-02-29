<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-if="loading" class="col-md-8">
                <strong>LOADING</strong>
            </div>
            <div v-else class="col-md-8">
                <div class="card">
                    <div class="card-header">Supply Product</div>

                    <div class="card-body">
                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-sm-3 mt-2">
                                    <label for="Products">Select a product</label>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <select name="products" class="form-control">
                                        <option v-for="product in products" :value="product.id">{{ product.name }}</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 my-1">
                                    <button type="submit" class="btn btn-primary float-right">Supply Product</button>
                                </div>
                            </div>
                        </form>
                        <!-- <div v-for="product in products">
                            {{ product.name }}
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                'products' : [],
                'loading' : false,
            }
        },
        mounted() {
            // console.log('Component mounted.')
            this.getProducts();
        },
        methods: {

            getProducts() {
                // set loader to true
                this.loading = true;

                // Get all the products
                axios.get('api/supply-product')
                .then(response => {
                    this.loading = false;

                    // handle success
                    // console.log(response.data.data);
                    this.products = response.data.data;
                })
                .catch(error => {
                    this.loading = false;

                    // handle error
                    console.log(error);
                })
            }

        }
    }
</script>
