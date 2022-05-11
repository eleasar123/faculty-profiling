import axios from "axios";

const state = () => ({
    products: null,
});

const mutations = {
    setProducts(state, data) {
        state.products = JSON.parse(data);
    }
};

const actions = {
    retrieveProducts({ commit }) {
        return axios.get(`products`).then((result) => {
            commit('setProducts', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrieveProductById({ state, commit }) {
        return axios.get(`products/${JSON.parse(state.products).ID}`).then((result) => {

            commit('setProducts', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    createProduct({ dispatch }, data) {
        return axios
          .post("products", data)
          .then(async (result) => {
            try {
              await dispatch("retrieveProducts");
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },

    updateProduct({state}, props) {
        return axios
            .put(`products/`+ props.id, props)
            .then((result) => {
              state.products[props.index] = props.editedData;
              return result;
            })
            .catch((err) => {
              return err.response;
            });
    },

    deleteProduct({ state }, props) {
        const index = state.products.indexOf(props.item);
        return axios
        .delete("products/" + props.id)
        .then((result) => {
            state.products.splice(index, 1);
            return result;
        })
        .catch((err) => {
            return err.response;
        });
     },


   
};

const getters = {
    productsAll: (state) => state.products,
};

export default {
    state,
    actions,
    mutations,
    getters,
};