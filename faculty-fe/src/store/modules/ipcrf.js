import axios from "axios";

const state = () => ({
    ipcrfInfos: null,
});

const mutations = {
    setIpcrfInfos(state, data) {
        state.ipcrfInfos = JSON.parse(data);
        localStorage.setItem('esat', data);
    }
};

const actions = {
    retrieveIpcrfInfo({ commit }) {
        return axios.get(`ipcrf/`).then((result) => {
            commit('setIpcrfInfos', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrieveIpcrfInfoById({ state, commit }) {
        return axios.get(`ipcrf/${JSON.parse(state.ipcrfInfos).ID}`).then((result) => {

            commit('setIpcrfInfos', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    createIpcrf({ dispatch }, data) {
        return axios
          .post("ipcrf/create", data)
          .then(async (result) => {
            try {
              await dispatch("retrieveIpcrfInfos");
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },

    updateIPcrfInfo({state}, props) {
        return axios
            .post(`ipcrf/edit/${props.ID}`, props)
            .then((result) => {
              state.ipcrfInfos[props.index] = props.editedData;
              return result;
            })
            .catch((err) => {
              return err.response;
            });
    },

    deleteIpcrfInfo({ state }, props) {
        const index = state.ipcrfInfos.indexOf(props.item);
        return axios
        .delete("ipcrf/delete/" + props.ID)
        .then((result) => {
            state.ipcrfInfos.splice(index, 1);
            return result;
        })
        .catch((err) => {
            return err.response;
        });
     },


   
};

const getters = {
    ipcrfInfosAll: (state) => state.ipcrfInfos,
};

export default {
    state,
    actions,
    mutations,
    getters,
};