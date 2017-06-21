# Bootstrap benchmark
* Local environment
```
PHP 7.0.19 (cli) (built: May 21 2017 11:56:11) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.0.0, Copyright (c) 1998-2017 Zend Technologies
```

* Benchmark tool  
wrk [https://github.com/wg/wrk](https://github.com/wg/wrk)
```
wrk -t12 -c400 -d30s http://localhost:12345
```

# Results
## minph framework
```
Running 30s test @ http://localhost:12345
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   342.76ms  250.10ms   1.21s    66.63%
    Req/Sec    11.13      9.05    58.00     76.97%
  2044 requests in 30.10s, 702.62KB read
  Socket errors: connect 0, read 2411, write 0, timeout 0
Requests/sec:     67.92
Transfer/sec:     23.35KB
```

## CakePHP 3.4
```
Running 30s test @ http://localhost:12345
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.33s   259.81ms   2.00s    80.00%
    Req/Sec     5.59      4.72    30.00     91.71%
  1280 requests in 30.04s, 163.75KB read
  Socket errors: connect 0, read 1718, write 0, timeout 320
Requests/sec:     42.61
Transfer/sec:      5.45KB
```

## Yii 2.0
```
Running 30s test @ http://localhost:12345
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency   345.48ms  282.89ms   1.59s    81.46%
    Req/Sec     9.05      7.27    49.00     71.42%
  2001 requests in 30.06s, 255.99KB read
  Socket errors: connect 0, read 2367, write 0, timeout 0
Requests/sec:     66.58
Transfer/sec:      8.52KB
```

## Laravel framework 5.4
```
Running 30s test @ http://localhost:12345
  12 threads and 400 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency     1.03s   557.20ms   1.97s    57.69%
    Req/Sec     3.86      3.69    20.00     65.79%
  802 requests in 30.11s, 741.81KB read
  Socket errors: connect 0, read 1165, write 0, timeout 750
Requests/sec:     26.64
Transfer/sec:     24.64KB
```

