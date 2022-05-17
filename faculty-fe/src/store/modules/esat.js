import axios from "axios";

const state = () => ({
    esatInfos: null,
});

const mutations = {
    setEsatInfos(state, data) {
        state.esatInfos = JSON.parse(data);
        localStorage.setItem('esat', data);
    }
};

const actions = {
    retrieveEsatInfos({ commit }) {
        return axios.get(`esat/`).then((result) => {

            commit('setEsatInfos', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    retrieveEsatInfoById() {
        // console.log(JSON.parse(sessionStorage.getItem("user_session")))
        //state.basicInfoData = []
        return axios
            .get("esat/" + JSON.parse(sessionStorage.getItem("user_session")).id)
            .then((res) => {
                return res;
            })
            .catch((err) => {
                return err.response;
            });
    },

    createEsat({ dispatch }, data) {
        return axios
            .post("esat/create", data)
            .then(async(result) => {
                try {
                    await dispatch("retrieveEsatInfoById");
                    return result;
                } catch (error) {
                    return error;
                }
            })
            .catch((err) => {
                return err.response;
            });
    },

    updateEsatInfo({dispatch}, props) {
        return axios
            .post(`esat/edit`, props)
            .then(async(result) => {
               try {
              await dispatch('retrieveEsatInfoById');
              return result;
            } catch (error) {
              return error;
            }
            })
            .catch((err) => {
                return err.response;
            });
    },
    // updateEsatInfo({dispatch}, props) {
    //     return axios
    //         .post(`esat/edit`, props)
    //         .then((result) => {
    //             try {
    //                 await dispatch('retrievePdsInfoById');
    //                 return result;
    //               } catch (error) {
    //                 return error;
    //               }
    //               })
    //               .catch((err) => {
    //                   return err.response;
    //               });
    // },

    deleteEsatInfo({ state }, props) {
        const index = state.esatInfos.indexOf(props.item);
        return axios
            .delete("esat/delete/" + props.ID)
            .then((result) => {
                state.esatInfos.splice(index, 1);
                return result;
            })
            .catch((err) => {
                return err.response;
            });
    },
};

const getters = {
    esatInfosAll: (state) => state.esatInfos,
};

export default {
    state,
    actions,
    mutations,
    getters,
};