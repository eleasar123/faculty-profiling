import axios from "axios";
const state = () => ({
    pdsInfos: null,
});

const mutations = {
    setPdsInfos(state, data) {
        state.pdsInfos = JSON.parse(data);
        localStorage.setItem('pds', data);
    }
};

const actions = {
    retrievePdsInfo({ commit }) {
        return axios.get(`pds/`).then((result) => {

            commit('setPdsInfos', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrievePdsInfoById() {
        console.log(JSON.parse(sessionStorage.getItem("user_session")).id)
        state.pdsInfos = []
        return axios
          .get("pds/" + JSON.parse(sessionStorage.getItem("user_session")).id)
          .then((res) => {
            console.log(res)
            return res;

          })
          .catch((err) => {
            return err.response;
          });
      },

    createPds({ dispatch }, data) {
        return axios
          .post('pds/create', data)
          .then(async(result) => {
            try {
              await dispatch('retrievePdsInfo');
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },

    updatePdsInfo({state}, props) {
        return axios
            .post(`pds/edit/${props.ID}`, props)
            .then((result) => {
              state.pds[props.index] = props.editedData;
              return result;
            })
            .catch((err) => {
              return err.response;
            });
    },

    deletePdsInfo({ state }, props) {
        const index = state.pdsInfos.indexOf(props.item);
        return axios
        .delete("pds/delete/" + props.ID)
        .then((result) => {
            state.pdsInfos.splice(index, 1);
            return result;
        })
        .catch((err) => {
            return err.response;
        });
     },


   
};

const getters = {
    pdsInfosAll: (state) => state.pdsInfos,
};

export default {
    state,
    actions,
    mutations,
    getters,
};