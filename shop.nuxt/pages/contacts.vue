<template>
	<div class="page">

		<section class="pageSection">
			<div class="mcontainer">
				<div class="sectionHeader sectionBlock">
					<BreadCrumbs :items="crumbs" :i18n="$i18n" @localePath="localePath"/>

					<h2 class="page-title medium capitalize-first">{{ $t('menu.contacts') }}</h2>
				</div>
			
				<div class="sectionBlock content-container whiteBlock medium">
					<div class="mrow flex wrap">
						<div class="mcol-xs-12 mcol-sm-6">
							<h2 class="title section-title">Пресс-центр</h2>
							
							<div class="info-list contacts-list">
								<div class="info-block-item contact-item ">
									<div><b>ИО директора по PR:</b></div>
									<div>Кристина Еременко,</div>
									<div>067 123 45 67,</div>
									<div><a href="mailto:testtest@gmail.com">testtest@gmail.com</a></div>  
								</div>
							
								<div class="info-block-item contact-item">
									<div><b>Ведущий специалист по PR:</b></div>
									<div>Дмитрий Михайлов,</div>
									<div>067 123 45 67,</div>
									<div><a href="mailto:tttttt@gmail.com">tttttt@gmail.com</a></div>
								</div>
							
								<div class="info-block-item contact-item">
									<div><b>ИО директора по PR:</b></div>
									<div>Кристина Еременко,</div>
									<div>067 123 45 67,</div>
									<div><a href="mailto:testtest@gmail.com">testtest@gmail.com</a></div>
								</div>
							
								<div class="info-block-item contact-item">
									<div><b>Ведущий специалист по PR:</b></div>
									<div>Дмитрий Михайлов,</div>
									<div>067 123 45 67,</div>
									<div><a href="mailto:tttttt@gmail.com">tttttt@gmail.com</a></div>
								</div>
							
								<div class="info-block-item contact-item">
									<div><b>Главный офис</b></div>
									<div>Адрес: 69000, Киев, ул. Л. вапвапвап, д. 26, стр. 5. Телефон: 067 123 45 67</div>
								</div>
							</div>
						</div>

						<!-- <div class="mcol-xs-12 mcol-sm-5 push-right">
							<h2 class="title section-title">Напишите нам</h2>

							<form action="/" class="standard-form">
								<div class="formRow">
									<textarea name="message"  rows="7" placeholder="введите сообщение"></textarea>
								</div>
								<div class="formRow">
									<button type="submit" class="standardButton primary uppercase">Отправить</button>
								</div>
							</form>
						</div> -->
					</div>
				</div>
			</div>
		</section>

	</div> 
</template>

<script>
	import { breadcrumbsFromPathMixin, seoMixin } from '@/mixins';
	import { getSeoLink } from "@/helpers";

	export default {
		name: 'delivery_payment',
		mixins: [breadcrumbsFromPathMixin, seoMixin],

		computed: {
			instancePropName: () => 'seo_data',

			seo_data() {
				return {
					title_ru: this.$t('menu.contacts'),
					title_he: this.$t('menu.contacts'),
					seo_description_ru: this.$t('menu.contacts'),
					seo_description_he: this.$t('menu.contacts'),
				}
			},
		},
	
		async fetch({store, route}) {
			await store.dispatch('seo/fetch_meta_tags', {
				params:	{redirect_uri: getSeoLink(route) }
			});

			if (store.state.categories.catalogData.length < 1) {
				// console.log('fetch index')
				await store.dispatch('categories/fetch_catalog_items', {
					params:	{ max: -1, withChildren:true }
				});
			}
		}
	}
	
</script>