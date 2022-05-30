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
            commit;
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrieveIpcrfInfoById({  commit }, id,) {
        return axios.get(`ipcrf/${id}`).then((result) => {

            commit('setIpcrfInfos', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrieveIpcrfInfoBySchoolYear({  commit }, data) {
      return axios.post('ipcrf/getBySchoolYear', data).then((result) => {

          commit('setIpcrfInfos', JSON.stringify(result.data));
          return result;
      }).catch((err) => {
          return err.response;
      });
  },

    createIpcrfPart1({ dispatch,commit }, data) {
        return axios
          .post("ipcrf/createPart1", data)
          .then(async (result) => {
            try {
              await dispatch("retrieveIpcrfInfo");
              commit;
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },

      createIpcrfPart2({ dispatch,commit }, data) {
        return axios
          .post("ipcrf/createPart2", data)
          .then(async (result) => {
            try {
              await dispatch("retrieveIpcrfInfo");
              commit;
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },
      createIpcrfPart4({ dispatch,commit }, data) {
        return axios
          .post("ipcrf/createPart4", data)
          .then(async (result) => {
            try {
              await dispatch("retrieveIpcrfInfo");
              commit;
              return result;
            } catch (error) {
              return error;
            }
          })
          .catch((err) => {
            return err.response;
          });
      },

    updateIpcrfPart1({commit}, props) {
        return axios
            .post('ipcrf/updatePart1', props)
            .then((result) => {
              //state.ipcrfInfos[props.index] = props.editedData;
              commit;
              return result;
            })
            .catch((err) => {
              return err.response;
            });
    },

    updateIpcrfPart2({commit}, props) {
      return axios
          .post('ipcrf/updatePart2', props)
          .then((result) => {
            //state.ipcrfInfos[props.index] = props.editedData;
            commit;
            return result;
          })
          .catch((err) => {
            return err.response;
          });
  },

  updateIpcrfPart4({state,commit}, props) {
    return axios
        .post('ipcrf/updatePart4', props)
        .then((result) => {
          state.ipcrfInfos[props.index] = props.editedData;
          commit;
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