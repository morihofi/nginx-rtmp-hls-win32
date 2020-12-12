# nginx-rtmp-hls-win32
Nginx RTMP Server with HLS (Win32) with PHP Support

# What is nginx-rtmp-hls-win32
- It is a Livestream Server with HLS (HTTP Live Streaming) Support, so you can play streams with HTML5 (Adobe Flash is not needed)
- It is a Fork of https://github.com/illuspas/nginx-rtmp-win32.
- This Fork is HTML5 compatible.

# Running under Windows
Make sure that you have installed Visual Studio 2015, 2017 and 2019 runtimes. You can download it from https://support.microsoft.com/de-de/help/2977003/the-latest-supported-visual-c-downloads. Run start.bat to run Server. The Server will be running on port 8080.

# Running under Linux
Install Wine (https://www.winehq.org/) . Inside Wine install Visual Studio 2015, 2017 and 2019 runtime from https://support.microsoft.com/de-de/help/2977003/the-latest-supported-visual-c-downloads (It is needed by PHP to run).
Now you can run start.bat. The Server will be running on port 8080.


# How to stream to this Server
Make sure that the server is running.
Then install OBS from https://obsproject.com/

In OBS:
1. File --> Settings --> Stream
2. Select Platfrom "User defined"
3. Select Server rtmp://127.0.0.1/live (when it runs on your local PC)
4. For the Stream Key open your browser to http://127.0.0.1:8080/genlink.php to get your stream key
5. Now you can stream!
