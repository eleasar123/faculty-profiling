import axios from "axios";
const state = () => ({
    
    userToken: JSON.parse(sessionStorage.getItem('user_session')),
    userDetails: null,
});

const mutations = {
    setUserToken(state, data) {
        state.userToken = data;
        sessionStorage.setItem("user_session", JSON.stringify(data.data[1][0].account));
        sessionStorage.setItem("user_token", JSON.stringify(data.data[2][0].token));
    //     axios.defaults.headers.common.Authorization = `bearer ${
    //   JSON.parse(data).access_token
    // }`;
    },

    clearUserSession() {
        sessionStorage.clear();
        axios.defaults.headers.common.Authorization = "";
        location.reload();
    },

    setUserDetails(state, data) {
        state.userDetails = JSON.stringify(data.data[1][0].account);
        console.log(state.userDetails)
        localStorage.setItem('user_details', data);
    }
};

const actions = {
    loginLocally({ commit }, data) {
        return axios
            .post('login', data)
            .then((result) => {
                console.log(result);
                commit("setUserToken", result);
                return result;
            })
            .catch((err) => {
                return err.response;
            });
    },

    retrieveUserData({ state, commit }) {
        return axios.get(`user/profile/${JSON.parse(state.userToken).empId}`).then((result) => {

            commit('setUserDetails', JSON.stringify(result.data));
            return result;
        }).catch((err) => {
            return err.response;
        });
    },

    logout({ commit }) {
        commit("clearUserSession");
        this.$router.push('login');
    },
};

const getters = {
    loggedUserToken: (state) => state.userToken,
    userDetailsAll: (state) => state.userDetails
};

export default {
    state,
    actions,
    mutations,
    getters,
};