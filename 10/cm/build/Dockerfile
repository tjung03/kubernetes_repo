FROM ubuntu:24.04
RUN apt update && apt -y install rig boxes && rm -rf /var/lib/apt/lists/*
ENV INTERVAL=5
ENV OPTION=stone
ADD genid.sh /bin/genid.sh
RUN chmod +x /bin/genid.sh
ENTRYPOINT ["/bin/genid.sh"]

