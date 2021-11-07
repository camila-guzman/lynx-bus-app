import React from "react";
import {View, StyleSheet, Text, Image, Button } from "react-native";



function StartUp() {
    return (
        <View style={styles.container}>
            <Text>
                
                <Image source={require('../../assets/lynx.png')} />
           </Text>
        </View>
    );
}

const styles = StyleSheet.create({
  container: {
    position: 'absolute',
    top: '40%',
    left: '6%',
  }

});

export default StartUp;