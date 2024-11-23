if (window.Capacitor) {
    // Request permissions for push notifications
    window.Capacitor.Plugins.PushNotifications.requestPermissions().then((result) => {
        if (result.receive === 'granted') {
            console.log('Push Notification permission granted');

            // Register for push notifications
            window.Capacitor.Plugins.PushNotifications.register();

            // Listen for token registration
            window.Capacitor.Plugins.PushNotifications.addListener('registration', (token) => {
                console.log('FCM Token:', token.value);
                document.getElementById('fcmTokenDisplay').innerText = token.value;
            });


			window.Capacitor.Plugins.PushNotifications.addListener('pushNotificationReceived', (notification) => {
    		console.log('Foreground notification received:', notification);

			const notificationId = parseInt(new Date().getTime() / 1000, 10); // Generate a unique integer ID
			const scheduleAt = new Date(); // Schedule it to trigger now
			scheduleAt.setSeconds(scheduleAt.getSeconds() + 1); // 1 second delay for testing

			// Schedule the local notification
			window.Capacitor.Plugins.LocalNotifications.schedule({
				notifications: [
					{
						id: notificationId, // Ensure this is an integer
						title: notification.title,
						body: notification.body,
						schedule: { at: scheduleAt }, // Schedule for now + 1 second
						smallIcon: "ic_notification",
						sound: "default",
					},
				],
			}).catch((error) => {
				console.error("Error scheduling notification:", error.message);
			});
		});

            
        } else {
            console.error('Push Notification permission denied');
        }
    });
} else {
    console.log('Not running in Capacitor. Push notifications not available.');
}