import AgoraRTC from "agora-rtc-sdk-ng"

let options =
    {
        // Pass your App ID here.
        appId: 'dfc4813956734088901788ff47ce5316',
        // Set the channel name.
        channel: 'SKYNET',
        // Pass your temp token here.
        token: '007eJxTYKhmt4p8tGzah3837Jc6vT9YWPZ3X87qxZN4LZ6JykmuDD2hwJCSlmxiYWhsaWpmbmxiYGFhaWBobmGRlmZinpxqamxoJmr3KqUhkJHhS70OEyMDBIL4bAzB3pF+riEMDADamx/3',
        // Set the user ID.
        uid: 222,
        // Set the user role
        role: ''
    };

let channelParameters =
    {
        // A variable to hold a local audio track.
        localAudioTrack: null,
        // A variable to hold a local video track.
        localVideoTrack: null,
        // A variable to hold a remote audio track.
        remoteAudioTrack: null,
        // A variable to hold a remote video track.
        remoteVideoTrack: null,
        // A variable to hold the remote user id.s
        remoteUid: null,
    };
async function startBasicCall()
{
// Create an instance of the Agora Engine
    const agoraEngine = AgoraRTC.createClient({ mode: "live", codec: "vp9" });
// Dynamically create a container in the form of a DIV element to play the remote video track.
    const remotePlayerContainer = document.createElement("div");
// Dynamically create a container in the form of a DIV element to play the local video track.
    const localPlayerContainer = document.createElement('div');
// Specify the ID of the DIV container. You can use the uid of the local user.
    localPlayerContainer.id = options.uid;
// Set the textContent property of the local video container to the local user id.
    localPlayerContainer.textContent = "Local user " + options.uid;
// Set the local video container size.
    localPlayerContainer.style.width = "640px";
    localPlayerContainer.style.height = "480px";
    localPlayerContainer.style.padding = "15px 5px 5px 5px";
// Set the remote video container size.
    remotePlayerContainer.style.width = "640px";
    remotePlayerContainer.style.height = "480px";
    remotePlayerContainer.style.padding = "15px 5px 5px 5px";
// Listen for the "user-published" event to retrieve a AgoraRTCRemoteUser object.
    agoraEngine.on("user-published", async (user, mediaType) =>
    {
        // Subscribe to the remote user when the SDK triggers the "user-published" event.
        await agoraEngine.subscribe(user, mediaType);
        console.log("subscribe success");
        // Subscribe and play the remote video in the container If the remote user publishes a video track.
        if (mediaType == "video")
        {
            // Retrieve the remote video track.
            channelParameters.remoteVideoTrack = user.videoTrack;
            // Retrieve the remote audio track.
            channelParameters.remoteAudioTrack = user.audioTrack;
            // Save the remote user id for reuse.
            channelParameters.remoteUid = user.uid.toString();
            // Specify the ID of the DIV container. You can use the uid of the remote user.
            remotePlayerContainer.id = user.uid.toString();
            channelParameters.remoteUid = user.uid.toString();
            remotePlayerContainer.textContent = "Remote user " + user.uid.toString();
            // Append the remote container to the page body.
            document.body.append(remotePlayerContainer);
            if(options.role != 'host')
            {
                // Play the remote video track.
                channelParameters.remoteVideoTrack.play(remotePlayerContainer);
            }
        }
        // Subscribe and play the remote audio track If the remote user publishes the audio track only.
        if (mediaType == "audio")
        {
            // Get the RemoteAudioTrack object in the AgoraRTCRemoteUser object.
            channelParameters.remoteAudioTrack = user.audioTrack;
            // Play the remote audio track. No need to pass any DOM element.
            channelParameters.remoteAudioTrack.play();
        }
        // Listen for the "user-unpublished" event.
        agoraEngine.on("user-unpublished", user =>
        {
            console.log(user.uid+ "has left the channel");
        });
    });
    window.onload = function ()
    {
        // Listen to the Join button click event.
        document.getElementById("join").onclick = async function ()
        {

            if(options.role == '')
            {
                window.alert("Select a user role first!");
                return;
            }

            // Join a channel.
            await agoraEngine.join(options.appId, options.channel, options.token, options.uid);
            // Create a local audio track from the audio sampled by a microphone.
            channelParameters.localAudioTrack = await AgoraRTC.createMicrophoneAudioTrack();
            // Create a local video track from the video captured by a camera.
            channelParameters.localVideoTrack = await AgoraRTC.createCameraVideoTrack();
            // Append the local video container to the page body.
            document.body.append(localPlayerContainer);

            // Publish the local audio and video track if the user joins as a host.
            if(options.role == 'host')
            {
                // Publish the local audio and video tracks in the channel.
                await agoraEngine.publish([channelParameters.localAudioTrack, channelParameters.localVideoTrack]);
                // Play the local video track.
                channelParameters.localVideoTrack.play(localPlayerContainer);
                console.log("publish success!");
            }
        }
        // Listen to the Leave button click event.
        document.getElementById('leave').onclick = async function ()
        {
            // Destroy the local audio and video tracks.
            channelParameters.localAudioTrack.close();
            channelParameters.localVideoTrack.close();
            // Remove the containers you created for the local video and remote video.
            removeVideoDiv(remotePlayerContainer.id);
            removeVideoDiv(localPlayerContainer.id);
            // Leave the channel
            await agoraEngine.leave();
            console.log("You left the channel");
            // Refresh the page for reuse
            window.location.reload();
        }
        document.getElementById('host').onclick = async function ()
        {
            if (document.getElementById('host').checked)
            {
                // Save the selected role in a variable for reuse.
                options.role = 'host';
                // Call the method to set the role as Host.
                await agoraEngine.setClientRole(options.role);
                if(channelParameters.localVideoTrack != null)
                {
                    // Publish the local audio and video track in the channel.
                    await agoraEngine.publish([channelParameters.localAudioTrack,channelParameters.localVideoTrack]);
                    // Stop playing the remote video.
                    channelParameters.remoteVideoTrack.stop();
                    // Start playing the local video.
                    channelParameters.localVideoTrack.play(localPlayerContainer);
                }
            }
        }
        document.getElementById('Audience').onclick = async function ()
        {
            if (document.getElementById('Audience').checked)
            {
                // Save the selected role in a variable for reuse.
                options.role = 'audience';
                if(channelParameters.localAudioTrack != null && channelParameters.localVideoTrack != null)
                {
                    if(channelParameters.remoteVideoTrack!=null)
                    {
                        // Replace the current video track with remote video track
                        await channelParamaters.localVideoTrack.replaceTrack(channelParamaters.remoteVideoTrack, true);
                    }
                }
                // Call the method to set the role as Audience.
                await agoraEngine.setClientRole(options.role);
            }
        }
    }
}
startBasicCall();
// Remove the video stream from the container.
function removeVideoDiv(elementId)
{
    console.log("Removing "+ elementId+"Div");
    let Div = document.getElementById(elementId);
    if (Div)
    {
        Div.remove();
    }
};
