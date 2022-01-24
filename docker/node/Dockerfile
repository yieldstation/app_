FROM node:16-buster

RUN npm install -g @vue/cli \
    && apt update \
    && apt install -y wget \
    && wget -O ~/vsls-reqs https://aka.ms/vsls-linux-prereq-script \
    && chmod +x ~/vsls-reqs && ~/vsls-reqs