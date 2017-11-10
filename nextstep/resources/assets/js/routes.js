export default [
    {
            path: '/home',
            name: 'home',
            component: require('./components/admin/Dashboard.vue'),
        },
        {
            path: '/admin/requests',
            name: 'requests',
            component: require('./components/admin/Requests.vue'),
        },
        {
			path: '/admin/events',
            name: 'events',
            component: require('./components/admin/Events.vue'),
        },
        {
            path: '/admin/blog',
            name: 'blog',
            component: require('./components/admin/Blog.vue'),
        },
        {
            path: '/admin/users',
            name: 'users',
            component: require('./components/admin/Users.vue'),
        },
        {
            path: '/admin/applications',
            name: 'applications',
            component: require('./components/admin/Applications.vue'),
        },
        {
            path: '/admin/event-types',
            name: 'eventTypes',
            component: require('./components/admin/EventTypes.vue'),
        },
        {
            path: '/admin/post-categories',
            name: 'postCategories',
            component: require('./components/admin/PostCategories.vue'),
        },
        { path: '*', redirect: '/' }

        ]