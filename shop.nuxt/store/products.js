import { dataState, statusState, filtersState } from '../store_common/commonState';
import { fetch_items, save_data, delete_item, multipurpose_response } from '../store_common/commonActions';
import { dataMutations, statusMutations } from '../store_common/commonMutations';

// initial products state
const scopedState = {
	// postsSomeData: {}
	topOfTheDay: null,
	bestSellers: [],
	newProducts: [],
	favoritedProducts: [],
	discountProducts: [],
	cartProducts: [],

	fetch_on_ssr: false,

	prices: {
		min: 10,
		max: 30000
	},

	filters: {
		brandId: null,
		max: 16,
		filterOptionIds: [],
		minPrice: 0,
		maxPrice: 30000,
		q: ''
	},
};

const state = () => ({ ...dataState, ...statusState, ...filtersState, ...scopedState });
const mutations = { ...dataMutations, ...statusMutations };
const getters = {
	// favoritedProducts: state => state.users,
};

// actions
const actions = {
	fetch_products(storeArgs, payload = {}) {
		const newPayload = { ...payload,
			axios:this.$axios,
			prepareData: 'prepareProductsList'
		};
		// const newPayload = {...payload, stateProp:'itemsList'}
		return fetch_items(storeArgs, '/products', newPayload);
	},

	fetch_product(storeArgs, payload = {}) {
		const newPayload = { ...payload,
			method: 'GET',
			notNotify: true,
			stateProp: 'itemData',
			// loadingProp: 'catalogLoading',
			alternateResponseProp: 'data',
			axios:this.$axios,
		};

		return multipurpose_response(storeArgs, `/products/${payload.itemAlias}`, newPayload);
	},

	fetch_products_by_criteria(storeArgs, payload = {}) {
		const newPayload = { ...payload,
			method: 'GET',
			notNotify: true,
			// loadingProp: 'catalogLoading',
			// alternateResponseProp: 'data',
			axios:this.$axios,
		};

		return multipurpose_response(storeArgs, `/products`, newPayload);
	},

	fetch_prices(storeArgs, payload = {}) {
		const newPayload = { ...payload,
			method: 'GET',
			notNotify: true,
			loadingProp: 'pricesLoading',
			stateProp: 'prices',
			alternateResponseProp: 'data',
			// notSetToStore: true,
			axios:this.$axios,
		};

		return multipurpose_response(storeArgs, `/products/prices`, newPayload);
	},

	/*fetch_top_of_the_day(storeArgs, payload = {}) {
		const extendedPayload = { ...payload, stateProp: 'topOfTheDay', axios:this.$axios };
		return fetch_data(storeArgs, '/products/top', extendedPayload);
	},

	fetch_bestsellers(storeArgs, payload = {}) {
		const extendedPayload = { ...payload, stateProp: 'bestSellers', axios:this.$axios };
		return fetch_data(storeArgs, '/products/bestSellers', extendedPayload);
	},

	fetch_new_products(storeArgs, payload = {}) {
		const extendedPayload = { ...payload, stateProp: 'newProducts', axios:this.$axios };
		return fetch_data(storeArgs, '/products/newProducts', extendedPayload);
	},

	fetch_discounts(storeArgs, payload = {}) {
		const extendedPayload = { ...payload, stateProp: 'discountProducts', axios:this.$axios };
		return fetch_data(storeArgs, '/products/discounts', extendedPayload);
	},

	fetch_favorited(storeArgs, payload = {}) {
		const extendedPayload = { ...payload, stateProp: 'favoritedProducts', axios:this.$axios };
		return fetch_data(storeArgs, '/products/favorited', extendedPayload);
	},*/

	/*fetch_cart(storeArgs, payload = {}) {
		const extendedPayload = { ...payload, stateProp: 'cartProducts', axios:this.$axios };
		return multipurpose_response(storeArgs, '/products/cart', extendedPayload);
	},*/

	// -------------------
	create_order(storeArgs, payload = {}) {
		const extendedPayload = { ...payload,
			notSetToStore:true,
			// notNotifyError: true,
			axios:this.$axios,
			action: {actionName:'cart/fetch_cart', root:true},
			resultMessage: {text: 'Ваш заказ добавлен в корзину!' }
		};
		return save_data(storeArgs, `/products/order`, extendedPayload);
	},
	/*toggle_favorited(storeArgs, payload) {
		const extendedPayload = { 
			...payload,
			method: 'PUT',
			stateProps: ['bestSellers', 'newProducts', 'discountProducts', 'topOfTheDay'],
			action: 'fetch_favorited',
			resultMessage: {flag:'is_favorited', is_true: 'Товар выбран', is_false: 'Товар удален'}

			// stateProp: 'favoritedProducts'
		};
		return universal_item_response(
			storeArgs, `/products/${extendedPayload.itemId}/toggle_favorited`, 
			extendedPayload
		)
	},*/

	/*toggle_cart(storeArgs, payload) {
		const extendedPayload = { 
			...payload,
			method: 'PUT',
			stateProps: ['bestSellers', 'newProducts', 'discountProducts', 'topOfTheDay'],
			action: 'fetch_cart',
			resultMessage: {flag:'in_cart', is_true: 'Товар добавлен в корзину', is_false: 'Товар удален из корзины'}
			// stateProp: 'favoritedProducts'
		};
		return universal_item_response(
			storeArgs, `/products/${extendedPayload.itemId}/toggle_cart`, 
			extendedPayload
		)
	},*/	

	save_product(storeArgs, payload) {
		const extendedPayload = { ...payload, stateProp: 'itemData' };
		return save_data(storeArgs, `/products`, extendedPayload);
	},

	delete_product(storeArgs, payload) {
		return delete_item(storeArgs, `/products/${payload.id}`, payload);
	},

	set_products({ commit }, items = []) {
		const payload = { stateProp: 'itemsList', value: items };
		commit('SET_STATE', payload);
	},

	set_product({ commit }, item = null) {
		const payload = { stateProp: 'itemData', value: item };
		commit('SET_STATE', payload);
	},

	set_filters({ commit }, filters) {
		const payload = { stateProp: 'filters', value: filters };
		commit('SET_STATE', payload);
	},

	set_state({ commit }, {stateProp, value}) {
		const payload = { stateProp: stateProp, value: value };
		commit('SET_STATE', payload);
	}
};

export default {
	namespaced: true,
	state,
	getters,
	actions,
	mutations
};
