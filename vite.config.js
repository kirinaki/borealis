import {defineConfig, loadEnv} from 'vite'
import fs from "fs";

export default ({mode}) => {
    process.env = {...process.env, ...loadEnv(mode, process.cwd())}

    return defineConfig({
        publicDir: 'public',
        build: {
            outDir: 'public/dist',
            assetsDir: '.',
            emptyOutDir: true,
            copyPublicDir: false,
            manifest: "manifest.json",
            rollupOptions: {
                input: ['resources/js/main.ts', 'resources/css/main.css'],
            },
        },
        plugins: [
            {
                name: "hot-file",
                configureServer(server) {
                    const file = "./public/hot"
                    fs.writeFileSync(file, "")

                    process.on("exit", () => {
                        if (fs.existsSync(file)) {
                            fs.rmSync(file)
                        }
                    })
                    process.on('SIGINT', () => process.exit())
                    process.on('SIGTERM', () => process.exit())
                    process.on('SIGHUP', () => process.exit())
                },
            },
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
