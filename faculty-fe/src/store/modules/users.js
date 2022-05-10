import axios from "axios";

const state = () => ({
    users: null,
});

const mutations = {
    setUser(state, data) {
        state.users = JSON.parse(data);
        sessionStorage.setItem('users', data);
    }
};

const actions = {
    retrieveUserData({  commit }) {
        return axios.get(`user/`).then((result) => {
            commit('setUser', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrieveUserDataById({ state, commit }) {
        return axios.get(`user/${JSON.parse(state.users).id}`).then((result) => {

            commit('setUser', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    createUser({ dispatch }, data) {
        return axios
          .post("user/create", data)
          .then(async (result) => {
            try {
              await dispatch("retrieveUserData");
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },

    updateAddressData({state}, props) {
        return axios
            .post(`user/edit/${props.ID}`, props)
            .then((result) => {
              state.users[props.index] = props.editedData;
              return result;
            })
            .catch((err) => {
              return err.response;
            });
    },

    deleteAddressData({ state }, props) {
        const index = state.users.indexOf(props.item);
        return axios
        .delete("user/delete/" + props.ID)
        .then((result) => {
            state.users.splice(index, 1);
            return result;
        })
        .catch((err) => {
            return err.response;
        });
     },


   
};

const getters = {
    userDetailsAll: (state) => state.users,
};

export default {
    state,
    actions,
    mutations,
    getters,
};