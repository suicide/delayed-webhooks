# Delayed Webhook trigger

simple php script that can be hosted anywhere and will send a request
to a IFTTT webhook with a requested delay of X seconds

vagrant box:
```
curl -X POST "http://192.168.33.10/delayed.php?key=<key>&webhook=test&delay=10"
```

Hosted:
```
curl -X POST "https://webhooks.get-it.us/delayed.php?key=<key>&webhook=test&delay=10"
```