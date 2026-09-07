#!/bin/bash

cat << EOF > /usr/share/nginx/html/index.html
<pre>
$(echo "SERVER: $(hostname)" | boxes -d santa)
</pre>
EOF

/docker-entrypoint.sh nginx -g "daemon off;"

