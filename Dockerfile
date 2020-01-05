FROM abiosoft/caddy

WORKDIR guardian

COPY . .

WORKDIR public

COPY ./Caddyfile .

CMD ["caddy"]
