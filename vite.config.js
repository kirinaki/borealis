import {defineConfig, loadEnv} from 'vite'

export default ({mode}) => {
    process.env = {...process.env, ...loadEnv(mode, process.cwd())}

    return defineConfig({
        base: `/wp-content/themes/${process.env.VITE_THEME_FOLDER}/public`,
        publicDir: 'public',
        server: {
            host: 'localhost',
            open: process.env.VITE_SITE_URL,
            preTransformRequests: true
        },
        build: {
            outDir: 'public/dist',
            assetsDir: '.',
            emptyOutDir: true,
            copyPublicDir: false,
            manifest: true,
            rollupOptions: {
                input: ['resources/js/main.js', 'resources/css/main.css'],
            },
        },
        plugins: [
            {
                name: 'twig-reload',
                handleHotUpdate({file, server}) {
                    if (file.endsWith('.twig')) {
                        server.ws.send({type: 'full-reload', path: '*'})
                    }
                },
            }
        ],
    })
}
