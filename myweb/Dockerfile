FROM nginx
RUN apt update && apt install -y boxes && apt clean autoclean && apt autoremove
EXPOSE 80
COPY startup.sh /startup.sh
RUN chmod +x /startup.sh
CMD ["/startup.sh"]

