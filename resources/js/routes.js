import All_Posts from './components/posts/PostsAllComponent'
import User_Posts from './components/posts/PostsUserComponent'
const routes = [
	{
		path: '/',
		component: All_Posts
	},
	{
		path: '/home',
		component: User_Posts
	}
];
export default routes